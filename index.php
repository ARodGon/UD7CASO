<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Partidos</title>
  </head>
  <body>
    <form action="filtrado.php" method="post">
      Equipo local<br>
      <select name="local">
        <option value="Lakers">Los Ángeles Lakers</option>
        <option value="Boston Celtics">Boston Celtics</option>
        <option value="Chicago Bulls">Chicago Bulls</option>
      </select><br>
      Equipo visitante<br>
      <select name="visitante">
        <option value="Lakers">Los Ángeles Lakers</option>
        <option value="Boston Celtics">Boston Celtics</option>
        <option value="Chicago Bulls">Chicago Bulls</option>
      </select><br>
      Temporada<br>
      <select name="temporada">
        <option value="2019/2020">2019/2020</option>
        <option value="2020/2021">2020/2021</option>
      </select><br>
      <input type="submit" value="FILTRAR">
    </form>
  </body>
</html>
