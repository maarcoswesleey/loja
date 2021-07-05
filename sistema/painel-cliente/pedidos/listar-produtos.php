
<?php 

require_once("../../../conexao.php"); 

$id_venda = $_POST['idvenda'];

echo '
<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">Produto</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
';

$res = $pdo->query("SELECT * from carrinho where id_venda = '$id_venda' ");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
for ($i=0; $i < count($dados); $i++) { 
 foreach ($dados[$i] as $key => $value) {
 }

 $id_produto = $dados[$i]['id_produto'];	
 $id_carrinho = $dados[$i]['id'];

 $combo = $dados[$i]['combo'];	

if($combo != 'Sim'){
	$res2 = $pdo->query("SELECT * from produtos where id = '$id_produto' ");
}else{
	$res2 = $pdo->query("SELECT * from combos where id = '$id_produto' ");
}


$dados2 = $res2->fetchAll(PDO::FETCH_ASSOC);
$nome_produto = $dados2[0]['nome'];
$valor = $dados2[0]['valor'];
$tip_envio = $dados2[0]['tipo_envio'];
$link = $dados2[0]['link'];

$res3 = $pdo->query("SELECT * FROM tipo_envios where id = '$tip_envio'");
$dados3 = $res3->fetchAll(PDO::FETCH_ASSOC);
$nome_envio = @$dados3[0]['nome'];

$valor = number_format( $valor , 2, ',', '.');


$res_v = $pdo->query("SELECT * FROM vendas where id = '$id_venda'");
$dados_v = $res_v->fetchAll(PDO::FETCH_ASSOC);
$venda_pago = $dados_v[0]['pago'];                          

echo ' <tr>
<td>';
if($venda_pago == 'Sim'){
echo '
<a href="" class="text-dark" onclick="avaliar('.$id_produto.')" title="Avaliar Produto">
<i class="fas fa-star mr-1 text-warning"></i>
'.$nome_produto.'</a>';
}else{
	echo 
$nome_produto;
}

 if($nome_envio == 'Digital'){

 	

	if($venda_pago == 'Sim'){

     echo '<i><small><span class="ml-2"><a target="_blank" href="'.$link.'" class="text-danger">Clique aqui para acessar o Link</a></span></small></i>';

	 }else{
	 	echo '<i><small><span class="ml-2">Ainda não liberado!! </span></small></i>';
	 }
 }


if($combo != 'Sim'){
	$query_c = $pdo->query("SELECT * from carac_prod where id_prod = '$id_produto'");
	$res_c = $query_c->fetchAll(PDO::FETCH_ASSOC);
	$total_prod_carac = @count($res_c);


	if($total_prod_carac > 0){

	   
	   $query4 = $pdo->query("SELECT * from carac_itens_car where id_carrinho = '$id_carrinho'");
	  $res4 = $query4->fetchAll(PDO::FETCH_ASSOC);
	  
	  for ($i2=0; $i2 < count($res4); $i2++) { 
	      foreach ($res4[$i2] as $key => $value) {
	  }


	  $nome_item_carac = $res4[$i2]['nome'];
	  $id_carac = $res4[$i2]['id_carac'];

	  $query1 = $pdo->query("SELECT * from carac where id = '$id_carac' ");
	  $res1 = $query1->fetchAll(PDO::FETCH_ASSOC);
	  $nome_carac = $res1[0]['nome'];


	    echo '<u><i><small><span class="mr-2 ml-2"><i class="mr-1 fa fa-check text-info"></i>'.$nome_carac.' : '.$nome_item_carac.'</span></small></i></u>';

	  }
	} 
}else{
	$query = $pdo->query("SELECT * FROM prod_combos where id_combo = '$id_produto' ");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);

                    for ($i=0; $i < count($res); $i++) { 
                      foreach ($res[$i] as $key => $value) {
                      }

                      $id_prod = $res[$i]['id_produto'];
                      $query2 = $pdo->query("SELECT * FROM produtos where id = '$id_prod' ");
                    $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                    $nome_prod = $res2[0]['nome'];

     echo '<u><i><small><span class="mr-1 ml-2"><i class="mr-1 fa fa-check text-info"></i>'.$nome_prod.'</span></small></i></u>';
 	}
}

echo '
</td>
<td>R$ '.$valor.'</td>
</tr>
';




}

echo ' 

</table>  

';


?>


