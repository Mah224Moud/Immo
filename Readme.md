Si ce n'est pas responsive:
Rajouter ceci dans <head> 
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
