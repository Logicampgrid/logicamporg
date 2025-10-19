# 🔧 PATCH 01 - Fix MongoDB sur Windows Local

## 📋 Problème
```
❌ Erreur: localhost:27017: [WinError 10061] 
   Aucune connexion n'a pu être établie car l'ordinateur cible l'a expressément refusée
```

**Cause**: MongoDB n'est pas démarré sur votre machine Windows

## ✅ Solution Express (3 étapes)

### Étape 1️⃣ - Vérifier si MongoDB est installé

Ouvrez **PowerShell** ou **CMD** en tant qu'administrateur:

```powershell
# Vérifier si MongoDB est installé
mongod --version
```

**Si MongoDB n'est PAS installé**: [Télécharger MongoDB Community](https://www.mongodb.com/try/download/community)

---

### Étape 2️⃣ - Démarrer MongoDB

#### Option A: Service Windows (RECOMMANDÉ) ⭐

```powershell
# Démarrer le service MongoDB
net start MongoDB
```

Si le service n'existe pas, créez-le:
```powershell
# Créer le dossier de données
mkdir C:\data\db

# Installer MongoDB comme service
"C:\Program Files\MongoDB\Server\7.0\bin\mongod.exe" --install --serviceName MongoDB --dbpath C:\data\db
```

#### Option B: Démarrage Manuel

```powershell
# Créer le dossier si nécessaire
mkdir C:\data\db

# Démarrer MongoDB manuellement
mongod --dbpath C:\data\db
```

⚠️ **Important**: Gardez cette fenêtre ouverte tant que vous utilisez l'application

---

### Étape 3️⃣ - Vérifier la connexion

Dans une **nouvelle fenêtre** PowerShell:

```powershell
# Se connecter à MongoDB
mongosh

# Ou avec l'ancien client:
mongo
```

Si vous voyez `>` ou `mongosh>`, **c'est bon!** ✅

---

## 🚀 Redémarrer votre application

Une fois MongoDB démarré:

1. **Arrêtez** votre application webhook (Ctrl+C)
2. **Redémarrez-la**
3. Les publications devraient maintenant se sauvegarder sans erreur

---

## 🔍 Vérification rapide

```powershell
# Vérifier que MongoDB écoute sur le port 27017
netstat -an | findstr 27017
```

Vous devriez voir:
```
TCP    127.0.0.1:27017        0.0.0.0:0              LISTENING
```

---

## 🐛 Problèmes courants

### ❌ "mongod n'est pas reconnu..."
➡️ Ajoutez MongoDB au PATH Windows:
```
C:\Program Files\MongoDB\Server\7.0\bin
```

### ❌ "Accès refusé"
➡️ Lancez PowerShell/CMD **en tant qu'administrateur**

### ❌ "Data directory not found"
➡️ Créez le dossier:
```powershell
mkdir C:\data\db
```

---

## 📊 Configuration automatique au démarrage

Pour que MongoDB démarre automatiquement avec Windows:

```powershell
# S'assurer que le service démarre automatiquement
sc config MongoDB start= auto

# Vérifier le statut
sc query MongoDB
```

---

## ✅ Validation finale

Une fois MongoDB démarré, votre application devrait afficher:

```
✅ [HH:MM:SS] [WIN] ✅ PATCH 63: Publication synchrone réussie
✅ Sauvegarde MongoDB réussie
```

Au lieu de:
```
❌ Erreur sauvegarde webhook: localhost:27017...
```

---

## 💡 Alternative: MongoDB Atlas (Cloud)

Si vous préférez une solution cloud gratuite:

1. Créez un compte sur [MongoDB Atlas](https://www.mongodb.com/cloud/atlas)
2. Créez un cluster gratuit (M0)
3. Obtenez votre connection string
4. Modifiez votre `.env`:
   ```env
   MONGO_URL=mongodb+srv://username:password@cluster.mongodb.net/database
   ```

---

## 📞 Besoin d'aide?

Dites-moi:
- ✅ MongoDB démarre correctement
- ❌ Une erreur spécifique
- 🤔 Besoin de plus de détails

Je suis là pour vous aider! 🚀
