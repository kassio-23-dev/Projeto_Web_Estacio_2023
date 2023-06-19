<?php

session_start();

$email = $_SESSION['email'];

require '../php/conexao.php';

$consulta = READ($email);

if($consulta['sexo'] == 'M'){
    $sexo = '<option selected value="M">MASCULINO</option>
             <option value="F">FEMININO</option>
             <option value="O">OUTRO</option>';
}elseif($consulta['sexo'] == 'F'){
    $sexo = '<option value="M">MASCULINO</option>
             <option selected value="F">FEMININO</option>
             <option value="O">OUTRO</option>';
}else{
    $sexo = '<option value="M">MASCULINO</option>
             <option value="F">FEMININO</option>
             <option selected value="O">OUTRO</option>';
}

echo '
    <table>
        <thead>
            <th colspan="2">
                <h1>DADOS DO CLIENTE</h1>
            </th>
        </thead>
        <tbody>
            <tr>
                <td class="width10percent"><label for="ID">ID</label></td>
                <td><input class="dados-campo nao-clique" id="ID" type="text" placeholder="ID" value="'. $consulta['id_cadastro'] .'" readonly required></td>
            </tr>
            <tr>
                <td class="width10percent"><label for="nome">NOME</label></td>
                <td><input class="dados-campo" id="nome" name="nome" type="text" placeholder="NOME" value="'. $consulta['nome_completo'] .'" readonly="true" required></td>
            </tr>
            <tr>
                <td class="width10percent"><label for="senha">SENHA</label></td>
                <td><input class="dados-campo" id="senha" name="senha" type="text" placeholder="SENHA" value="'. $consulta['senha'] .'" readonly="true" required></td>
            </tr>
            <tr>
                <td class="width10percent"><label for="email">EMAIL</label></td>
                <td><input class="dados-campo" id="email" name="email" type="email" placeholder="EMAIL" value="'. $consulta['email'] .'" readonly="true" required></td>
            </tr>
            <tr>
                <td class="width10percent"><label for="telefone">TELEFONE</label></td>
                <td><input class="dados-campo" id="telefone" name="telefone" type="text" placeholder="TELEFONE" value="'. $consulta['telefone'] .'" readonly="true" required></td>
            </tr>
            <tr>
            <td class="width10percent"><label for="sexo">SEXO</label></td>
                <td>
                    <select id="sexo" name="sexo" class="dados-campo" required disabled>
                        ' . $sexo . '
                    </select>
                </td>
            </tr>
            <tr>
                <td class="width10percent"><label for="data-de-nascimento">DATA DE NASCIMENTO</label></td>
                <td><input class="dados-campo" id="data-de-nascimento" name="data-de-nascimento"" type="date" placeholder="DATA DE NASCIMENTO" value="'. $consulta['data_de_nascimento'] .'" readonly="true" required></td>
            </tr>
            <tr>
                <td class="width10percent"><label for="ENDERECO">ENDEREÇO</label></td>
                <td><input class="dados-campo" id="endereco" name="endereco" type="text" placeholder="ENDEREÇO" value="'. $consulta['endereco'] .'" readonly="true" required></td>
            </tr>

            <tr class="botao-mobile">
                <td colspan="2"><button id="cadeado-inner" class="botao material-symbols-outlined" onclick="cadeado()">lock</button></td>
            </tr>
            <tr class="botao-mobile">
                <td colspan="2"><button id="update-inner" name="update-inner" type="submit" class="botao">ATUALIZAR DADOS</button></td>
            </tr>
            <tr class="botao-mobile">
                <td colspan="2"><button id="delete" onclick="deletar()" class="botao">DELETAR CONTA</button></td>
            </tr>
            <tr class="botao-mobile">
                <td colspan="2"><a href="login.html"><button class="botao">SAIR</button></a></td>
            </tr>
        </tbody>
    </table>
    '
     ;
