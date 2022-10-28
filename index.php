<DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Verificador de Letra</title>
    </head>
    <body>
        <h1>Informe uma Letra</h1>
        <h3>Verificaremos se a letra informada é consoante ou uma vogal</h3>
        <form action="" method="GET">   
            <div class="box">
                <label>Digite sua Letra</label>
                <input 
                type="text"
                name="letra"
                placeholder="ex:A, B, C..."
                />    
             </div>
        </form>
        <?php
            
            $consoantes = $_GET ['consoante'];
            $letra = $_GET ['letra'] 
        ?>
        <?php 
            $vogaisaceitaveis = [
                'a',
                'e',
                'i', 
                'o', 
                'u',
            ];  
        
            $isVogaisExist = in_array ($vogais, $vogaisaceitaveis); 
        ?>
        <?php if ($letra != $vogaisaceitaveis): ?>
            <span>A letra digitada é uma consoante</span>
            <?php endif ?>
        <?php if ($letra == $vogaisaceitaveis): ?>
            <span>A letra digitada é uma vogal</span>
            <?php endif ?>
    </body>
    </html>