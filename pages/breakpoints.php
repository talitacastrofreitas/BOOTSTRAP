<?php
include "../includes/header.php";
?>
<div class="container">
<h2 class="text-center">Breakpoints</h2><br>
<a name="home" id="home" class="btn btn-primary" href="../index.php" role="button">Início</a>


    <table class="table">
        <thead>
            <tr>

                <th scope="col">Breakpoints</th>
                <th scope="col">Infixo de classe</th>
                <th scope="col">Dimensões</th>
            </tr>
        </thead>

        <tbody>
                <tr> 
                <td>Extra-pequeno</td> 
                <td>Nenhum</td>
                <td> < 576px </td>

                <tr>
                <td>Pequeno</td>  
                <td >sm</td>
                <td> >=576px</td>
                </tr>

                <tr>
                <td>Médio</td>  
                <td >md</td>
                <td>>=768px</td>
                </tr>

                <tr>
                <td>Grande</td>  
                <td >lg</td>
                <td>>=992px</td>
                </tr>

                <tr>
                <td>Extra-grande</td>  
                <td >xl</td>
                <td>>=1200px</td>
                </tr>

                <tr>
                <td>Extra-extra-grande</td>  
                <td >xxl</td>
                <td>>=1400px</td>
                </tr>
        </tbody>

    </table>
<br>

    <h3>Exemplo: <span style="font-size: 10px; color:red;">*modifique o tamanho do browser ou use o "inspencionar" para utilizar os exemplos de dimensões de dispositivos do browser*</span> </h3>
    <p class="text-center text-md-start text-xl-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quidem repudiandae dolore accusamus, sapiente ipsa quis nihil? Quos inventore reiciendis ex, quia distinctio eos, perferendis ipsam officia, unde atque quidem! Iure ea magni excepturi doloremque commodi facere numquam incidunt, perferendis et autem. Exercitationem ea totam excepturi sed dolorum officia blanditiis libero ipsa labore debitis asperiores, doloribus, voluptatum officiis ducimus nesciunt dicta commodi, esse odit? Beatae cumque impedit corporis quia cupiditate doloribus. Explicabo sed praesentium id repellendus voluptatem minima vero autem optio ullam, inventore minus enim perspiciatis iusto ad officia quisquam dolorum aliquam non doloremque aut veniam sint. Et, facere nisi!</p>
</div><br>

<div class="text-center">
<?php
include "../includes/footer.php"
?>
</div>