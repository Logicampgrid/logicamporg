#!/bin/bash

#########################################################
# SCRIPT DE VALIDATION - LOGICAMP PATCH DESIGN 01
# Vérifie que tous les fichiers sont présents et valides
#########################################################

echo \"\"
echo \"╔════════════════════════════════════════════════════╗\"
echo \"║   VALIDATION PATCH DESIGN 01 - LOGICAMP.ORG       ║\"
echo \"╚════════════════════════════════════════════════════╝\"
echo \"\"

# Couleurs
GREEN='\\033[0;32m'
RED='\\033[0;31m'
YELLOW='\\033[1;33m'
NC='\\033[0m' # No Color

# Compteurs
TOTAL=0
SUCCESS=0
FAIL=0

# Fonction de vérification
check_file() {
    TOTAL=$((TOTAL + 1))
    if [ -f \"$1\" ]; then
        echo -e \"${GREEN}✓${NC} $2 existe\"
        SUCCESS=$((SUCCESS + 1))
        
        # Vérifier la taille du fichier
        SIZE=$(stat -f%z \"$1\" 2>/dev/null || stat -c%s \"$1\" 2>/dev/null)
        if [ $SIZE -gt 0 ]; then
            echo \"  └─ Taille: $(numfmt --to=iec-i --suffix=B $SIZE 2>/dev/null || echo \"${SIZE} octets\")\"
        else
            echo -e \"  ${YELLOW}⚠${NC} Fichier vide !\"
        fi
    else
        echo -e \"${RED}✗${NC} $2 manquant !\"
        FAIL=$((FAIL + 1))
    fi
}

echo \"📂 Vérification des fichiers du patch...\"
echo \"\"

# Vérification des fichiers principaux
check_file \"./index-modern.php\" \"index-modern.php\"
check_file \"./style-modern.css\" \"style-modern.css\"

echo \"\"
echo \"📄 Vérification de la documentation...\"
echo \"\"

check_file \"./README.md\" \"README.md\"
check_file \"./INSTRUCTIONS_INTEGRATION.md\" \"INSTRUCTIONS_INTEGRATION.md\"
check_file \"./APERCU_DESIGN.md\" \"APERCU_DESIGN.md\"
check_file \"./QUICK_START.md\" \"QUICK_START.md\"

echo \"\"
echo \"═════════════════════════════════════════════════════\"
echo \"\"

# Résultats
if [ $FAIL -eq 0 ]; then
    echo -e \"${GREEN}✅ TOUS LES FICHIERS SONT PRÉSENTS !${NC}\"
    echo \"\"
    echo \"Vous pouvez procéder à l'installation :\"
    echo \"1. Consultez QUICK_START.md pour un démarrage rapide\"
    echo \"2. Ou INSTRUCTIONS_INTEGRATION.md pour le guide complet\"
else
    echo -e \"${RED}❌ $FAIL fichier(s) manquant(s)${NC}\"
    echo \"\"
    echo \"Veuillez télécharger tous les fichiers du patch.\"
fi

echo \"\"
echo \"📊 Résultat : $SUCCESS/$TOTAL fichiers OK\"
echo \"\"

# Vérification du contenu PHP (bonus)
if [ -f \"./index-modern.php\" ]; then
    echo \"🔍 Vérification rapide du contenu PHP...\"
    
    # Vérifier la présence de Bootstrap
    if grep -q \"bootstrap@5\" \"./index-modern.php\"; then
        echo -e \"${GREEN}✓${NC} Bootstrap 5 détecté\"
    else
        echo -e \"${YELLOW}⚠${NC} Bootstrap 5 non détecté\"
    fi
    
    # Vérifier la présence du formulaire
    if grep -q 'name=\"form\"' \"./index-modern.php\"; then
        echo -e \"${GREEN}✓${NC} Formulaire d'inscription présent\"
    else
        echo -e \"${RED}✗${NC} Formulaire d'inscription manquant\"
    fi
    
    # Vérifier les includes PHP
    if grep -q 'require_once' \"./index-modern.php\"; then
        echo -e \"${GREEN}✓${NC} Includes PHP détectés\"
    else
        echo -e \"${RED}✗${NC} Includes PHP manquants\"
    fi
    
    echo \"\"
fi

# Vérification du CSS (bonus)
if [ -f \"./style-modern.css\" ]; then
    echo \"🎨 Vérification rapide du CSS...\"
    
    # Vérifier les variables CSS
    if grep -q ':root' \"./style-modern.css\"; then
        echo -e \"${GREEN}✓${NC} Variables CSS présentes\"
    else
        echo -e \"${YELLOW}⚠${NC} Variables CSS manquantes\"
    fi
    
    # Vérifier les media queries
    if grep -q '@media' \"./style-modern.css\"; then
        echo -e \"${GREEN}✓${NC} Media queries responsive présentes\"
    else
        echo -e \"${RED}✗${NC} Media queries manquantes\"
    fi
    
    echo \"\"
fi

echo \"═════════════════════════════════════════════════════\"
echo \"\"
echo \"💡 Prochaine étape :\"
echo \"   Consultez QUICK_START.md pour l'installation rapide\"
echo \"\"
echo \"🚀 Bonne installation !\"
echo \"\"
