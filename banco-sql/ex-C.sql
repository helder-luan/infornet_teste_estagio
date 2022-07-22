SELECT * FROM beneficiario
WHERE FLOOR(DATEDIFF(NOW(), dataNascimento) / 365) > 40;