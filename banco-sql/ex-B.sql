SELECT * FROM beneficiario
INNER JOIN veiculo
ON beneficiario.id = veiculo.idBeneficiario
WHERE veiculo.situacao = "A";