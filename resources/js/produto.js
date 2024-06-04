function editarProduto(id) {
    // Envia uma requisição AJAX para recuperar os detalhes do produto com base no ID
    $.ajax({
        url: "/produto/" + id, // Rota para recuperar os detalhes do produto com base no ID
        type: "GET",
        success: function (response) {
            // Preenche os campos do modal com os detalhes do produto
            $("#modalNovoProduto #descricao").val(response.descricao);
            $("#modalNovoProduto #DataCompra").val(response.DataCompra);
            $("#modalNovoProduto #valor").val(response.valor);
            $("#modalNovoProduto #qtd").val(response.qtd);
            $("#modalNovoProduto #categoria").val(response.Ncategoria);
            $("#modalNovoProduto #Observacao").val(response.Observacao);
            $("#modalNovoProduto #unidade").val(response.NunidadeMedida);
            $("#modalNovoProduto #porcentagem_ganho").val(
                response.porcentagem_ganho
            );
            $("#modalNovoProduto #valor_venda").val(response.valor_venda);
            $("#modalNovoProduto #fornecedor").val(response.NFornecedor);
            $("#modalNovoProduto #CodigoBarras").val(response.CodigoBarras);
            $("#modalNovoProduto #valortotalcompra").val(
                response.valortotalcompra
            );

            // Abre o modal de edição
            $("#modalNovoProduto").modal("show");
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        },
    });
}
