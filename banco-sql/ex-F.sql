INSERT INTO veiculo ( idBeneficiario, placa, chassi, renavam, modelo, montadora, anoFabricacao, anoModelo, situacao) VALUES (
	(SELECT id FROM beneficiario WHERE beneficiario.nome = "Helder Luan Monteiro De Avelar"),
    "AWF16A4",
    "A5F6W4F5E1A4W5F7F",
    "A42W54A8G5E",
    "Argo Sport",
    "FIAT",
    "2022",
    "2022",
    "A"
);

INSERT INTO produtoVeiculo ( idProduto, idVeiculo ) VALUES (
	(
		SELECT id FROM produto 
		WHERE nome = "ASSISTENCIA 24 HORAS"
	),
    (
		SELECT id FROM veiculo 
		WHERE idBeneficiario = (SELECT id FROM beneficiario WHERE nome = "Helder Luan Monteiro De Avelar")
	)
);