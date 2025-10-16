#!/bin/bash

#########################################################
# SCRIPT DE VALIDATION - LOGICAMP PATCH DESIGN 01
# Verifie que tous les fichiers sont presents et valides
#########################################################

echo ""
echo "====================================================="
echo "   VALIDATION PATCH DESIGN 01 - LOGICAMP.ORG       "
echo "====================================================="
echo ""

# Compteurs
TOTAL=0
SUCCESS=0
FAIL=0

# Fonction de verification
check_file() {
    TOTAL=$((TOTAL + 1))
    if [ -f "$1" ]; then
        echo "[OK] $2 existe"
        SUCCESS=$((SUCCESS + 1))
        
        # Verifier la taille du fichier
        SIZE=$(stat -c%s "$1" 2>/dev/null || echo "0")
        if [ $SIZE -gt 0 ]; then
            echo "     Taille: $SIZE octets"
        else
            echo "     [WARNING] Fichier vide !"
        fi
    else
        echo "[FAIL] $2 manquant !"
        FAIL=$((FAIL + 1))
    fi
}

echo "Verification des fichiers du patch..."
echo ""

# Verification des fichiers principaux
check_file "./index-modern.php" "index-modern.php"
check_file "./style-modern.css" "style-modern.css"

echo ""
echo "Verification de la documentation..."
echo ""

check_file "./README.md" "README.md"
check_file "./INSTRUCTIONS_INTEGRATION.md" "INSTRUCTIONS_INTEGRATION.md"
check_file "./APERCU_DESIGN.md" "APERCU_DESIGN.md"
check_file "./QUICK_START.md" "QUICK_START.md"

echo ""
echo "====================================================="
echo ""

# Resultats
if [ $FAIL -eq 0 ]; then
    echo "[SUCCESS] TOUS LES FICHIERS SONT PRESENTS !"
    echo ""
    echo "Vous pouvez proceder a l'installation :"
    echo "1. Consultez QUICK_START.md pour un demarrage rapide"
    echo "2. Ou INSTRUCTIONS_INTEGRATION.md pour le guide complet"
else
    echo "[ERROR] $FAIL fichier(s) manquant(s)"
    echo ""
    echo "Veuillez telecharger tous les fichiers du patch."
fi

echo ""
echo "Resultat : $SUCCESS/$TOTAL fichiers OK"
echo ""

# Verification du contenu PHP (bonus)
if [ -f "./index-modern.php" ]; then
    echo "Verification rapide du contenu PHP..."
    
    # Verifier la presence de Bootstrap
    if grep -q "bootstrap@5" "./index-modern.php"; then
        echo "[OK] Bootstrap 5 detecte"
    else
        echo "[WARNING] Bootstrap 5 non detecte"
    fi
    
    # Verifier la presence du formulaire
    if grep -q 'name="form"' "./index-modern.php"; then
        echo "[OK] Formulaire d'inscription present"
    else
        echo "[FAIL] Formulaire d'inscription manquant"
    fi
    
    # Verifier les includes PHP
    if grep -q 'require_once' "./index-modern.php"; then
        echo "[OK] Includes PHP detectes"
    else
        echo "[FAIL] Includes PHP manquants"
    fi
    
    echo ""
fi

# Verification du CSS (bonus)
if [ -f "./style-modern.css" ]; then
    echo "Verification rapide du CSS..."
    
    # Verifier les variables CSS
    if grep -q ':root' "./style-modern.css"; then
        echo "[OK] Variables CSS presentes"
    else
        echo "[WARNING] Variables CSS manquantes"
    fi
    
    # Verifier les media queries
    if grep -q '@media' "./style-modern.css"; then
        echo "[OK] Media queries responsive presentes"
    else
        echo "[FAIL] Media queries manquantes"
    fi
    
    echo ""
fi

echo "====================================================="
echo ""
echo "Prochaine etape :"
echo "   Consultez QUICK_START.md pour l'installation rapide"
echo ""
echo "Bonne installation !"
echo ""
