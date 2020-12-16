<html>
    <head>
    </head>



    <body background="fundop.jpg" bgproperties="fixed">
        <fieldset style = "width: 50%; margin: 0px auto;">
            <legend>Batalha dos Professores:</legend>
            <table cellspacing="50">

                <FONT SIZE="3">Qual o melhor Professor(a)?</FONT><BR>
                <form id="votação" action="resultado.php" method="POST">
                    Salvador:<input type="radio" name="voto"  value="1"><br>
                    Caue:<input type="radio" name="voto"  value="2"><br>
                    joseneuza:<input type="radio" name="voto"  value="3"><br>
                    Jorge Targino:<input type="radio" name="voto"  value="4"><br>
                    Websters:<input type="radio" name="voto"  value="5"><br>
                    Rosa Maria:<input type="radio" name="voto"  value="6"><br>
                    Giselle machado:<input type="radio" name="voto" value="7"><br>
                    o motivo do voto ? :<input type="text" name="comentario"><br>
                    <input type="submit" name="button" value="Votar">
                </form>
                <form action="index.php">
                 <input type="submit" name="voltar" value="voltar" />
               </form>
                <p style="font-family:verdana,arial,sans-se"></p>
            </table>
        </fieldset>
        <br />
    </body>

</html>
