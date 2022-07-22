DELETE FROM produtoVeiculo
WHERE idVeiculo IN (SELECT id FROM veiculo WHERE situacao = "I")
OR idProduto IN (SELECT id FROM produto WHERE situacao = "I");