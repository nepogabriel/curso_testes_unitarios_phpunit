### Teste de integração
- Também chamado como: teste funcionou, teste de sistemas, teste fim a fim.

### Executar todos os testes de uma pasta:
```
./vendor/bin/phpunit src/OrderBundle/Test/Validators
```

### Executar um teste específico:
```
./vendor/bin/phpunit src/OrderBundle/Test/Validators/NomeDoArquivoDeTeste.php
```

### Como nomear os cenários?
As respostas devem conter no nome do cenário:
- O que está sendo testado?
- Quais as circunstâncias?
- Qual o resultado esperado?