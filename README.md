# DependencyInjection
## Exemple per a la classe de DAW-M7

Tenim una classe client amb les seves propietats i mètodes que la volem reciclar a més d'un projecte. Aquesta classe te un mètode toString que l'utilitzarem per serialitzar-la com a cadena de text. En una primera versió del codi utilitzem una interface __iVisorCliente__ que proporciona el mètode per serialitzar aquesta classe i en fem dues classes que ambdues implementen aquesta interface:
* VisorClienteHtml: que retorna un snippet Html amb un 'div' que conté la info del client.
* VisorClientCsv: que retorna la info del client com a text en format _CSV_.

I com a exemple d'ús podem executar l'script ListOfClients.php des de la CLI o veure la pàgina index.php des del nostre navegador web.