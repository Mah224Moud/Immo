Si ce n'est pas responsive, rajouter ceci dans `<head>` 
```html
<meta name="viewport" content="width=device-width, initial-scale=1" />
```


Pour tester en local (telephone):

1. Trouver l'adresse IP
    ```bash
    ifconfig en0 | grep "inet "
    ```
2. Lancer le serveur comme ceci:
    ```bash
    php -S 0.0.0.0:8000 -t public
    ```
3. Sur le tel aller
    ```bash
    http://172.20.10.4:8000
    ```

```bash
House:
  adresse: "12 rue des Lilas, Lyon"
  type: "Maison individuelle / Appartement / Studio"
  rent: 950           # Loyer mensuel en euros
  surface: 85         # Surface en m²
  rooms: 4            # Nombre de pièces
  bedrooms: 3         # Chambres
  bathrooms: 1        # Salles de bain
  furnished: true     # Meublé ou non
  parking: "Garage / Place / Aucun"
  garden: true        # Jardin ou non
  balcony: false      # Balcon ou non
  heating: "Gaz / Électrique / Collectif"
  availability_status: "Immédiate / Date précise"
  availability_date: null 
  description: "Maison lumineuse proche commerces et transports"
```

```bash
LeaseContract:
  id: 1
  tenant: User           # Le locataire (référence vers l'utilisateur)
  house: House           # La maison ou l’appartement loué
  contractType: "Bail habitation / Bail commercial / Meublé"
  startDate: 2025-10-01  # Début du bail
  endDate: 2026-09-30    # Fin prévue (ou null si durée indéterminée)
  rent: 1500000          # Montant mensuel (lié à la maison mais peut être fixé dans le contrat)
  charges: 50000         # Charges locatives (si séparées)
  deposit: 3000000       # Caution
  paymentFrequency: "Mensuel / Trimestriel"
  status: "Actif / Résilié / En attente"
  signedAt: 2025-09-20   # Date de signature du contrat
```
