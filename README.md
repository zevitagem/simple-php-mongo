# poc-crud-fees-checkout

## Exemplo de uso da API
```sh
http://localhost:8080/app/public/{CONTROLLER}

CONTROLLER PADRAO (caso nõo mande nada) = fees
METODO PADRAO (caso nao envie o action) = index

Exemplo:
http://localhost:8080/app/public/fees
http://localhost:8080/app/public/fees?action=add
http://localhost:8080/app/public?action=add
```

## Configuração para desenvolvimento .env
```sh
MONGO_INITDB_ROOT_USERNAME=root
MONGO_INITDB_ROOT_PASSWORD=example
MONGO_INITDB_HOST=mongo-fees-checkout
MONGO_INITDB_PORT=27017
```