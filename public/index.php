<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php
$site_path = '/engelsystem.de/public';

require '../vendor/less.php/Cache.php';
Less_Cache::$cache_dir = __DIR__ . '/vendor/bootstrap-3.2.0/css';

$files = array(
    __DIR__ . '/../vendor/bootstrap-3.2.0/less/bootstrap.less' => $site_path . '/vendor/bootstrap-3.2.0/css',
    __DIR__ . '/../theme.less' => $site_path 
);

$css_file_name = Less_Cache::Get($files);
echo '<link rel="stylesheet" type="text/css" href="' . $site_path . '/vendor/bootstrap-3.2.0/css/' . $css_file_name . '">';
echo '<link rel="stylesheet" type="text/css" href="' . $site_path . '/vendor/icomoon/style.css">';
?>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span class="icon-icon_angel"></span> <strong>ENGELSYSTEM</strong></a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#imprint">Impressum</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="jumbotron-instance-feature" class="jumbotron">
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-9">
              <h1>Helfer gesucht!</h1>
              <p>
                Werde <a href="http://hackover.de/">Hackover</a> Engel und helfe dabei das Hackover zu einem großartigen Ereignis zu machen. Keine Voraussetzungen - jeder kann helfen!
              </p>
              <p>
                <a class="btn btn-primary btn-lg" href="/hackover14/">Zum Hackover <span class="icon-icon_angel"></span> <strong>ENGELSYSTEM</strong> <span class="glyphicon glyphicon-chevron-right"></span></a> <a class="btn btn-default" href="/31c3/">Zum 31c3 <span class="icon-icon_angel"></span> <strong>ENGELSYSTEM</strong>
                  <span class="glyphicon glyphicon-chevron-right"></span></a>
              </p>
            </div>
            <div class="col-md-3">
              <a class="thumbnail" style="margin-top: 20px;" href="/hackover14/"> <img style="background: #000;" src="https://hackover.de/images/Invader2014.png" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="col-md-12 text-center">
      <h1>Online-Tool für Helfer- und Schichtplanung auf großen Events</h1>
      <p>Organisiere deine Helfer in Teams, teile sie in Schichten ein oder lasse sie selbst bestimmen, wann und wo sie helfen wollen.</p>
      <p>
        <a class="btn btn-primary" href="https://github.com/engelsystem/engelsystem"><span class="icon-icon_angel"></span> <strong>ENGELSYSTEM</strong> Installation (GitHub) </a>
      </p>
      <p class="text-muted">ab PHP 5.4 und MySQL 5.1</p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h2>Features</h2>
        <ul>
          <li>Verwaltung von Helfern, Teams, Räumen, Schichten, News und Meetings</li>
          <li>Auf Deutsch und Englisch (Erweiterbar)</li>
          <li>Komplexe Schicht-Ansicht mit Filter</li>
          <li><a href="https://frab.cccv.de/">Frab</a>-Import für Schichten</li>
          <li>iCal-Export für Schichten</li>
          <li>Anwesenheits-Management</li>
          <li>Belohnungssystem</li>
          <li>Nachrichtensystem</li>
          <li>Frage-/Antwortsystem</li>
          <li>Markdown Team-Beschreibung</li>
          <li>Detailliertes Log über jede Änderung</li>
        </ul>
      </div>
      <div class="col-md-4" style="opacity: 0.3;">
        <h2>Dokumentation</h2>
        <p>Hier findest Du Hilfe für die Benutzung des Engelsystems:</p>
        <p>
          <a class="btn btn-primary" href="">für <span class="icon-icon_angel"></span> Engel <small>(Helfer)</small> <span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
        <p>
          <a class="btn btn-default" href="">für Teamkoordinatoren <span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
        <p>
          <a class="btn btn-default" href="">für Erzengel <small>(Organisatoren)</small> <span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
        <p>
          <a class="btn btn-default" href="">für Administratoren <span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
      </div>
      <div class="col-md-4">
        <h2>Kontakt</h2>
        <p>Wenn du einen Softwarefehler entdeckt hast, sende bitte eine E-Mail an:</p>
        <p>
          <a href="mailto:bugs@engelsystem.de"><span class="glyphicon glyphicon-envelope"></span> bugs@engelsystem.de</a>
        </p>
        <p>Wenn du ein Engelsystem für ein Chaos-Event benötigst oder Probleme bei der Installation deines eigenen Engelsystems hast, sende eine E-Mail an:</p>
        <p>
          <a href="mailto:engelsystem@lists.ccc.de"><span class="glyphicon glyphicon-envelope"></span> engelsystem@lists.ccc.de</a>
        </p>
        <h3 id="imprint">Impressum</h3>
        <p>
          Verantwortlich für die Internetseite <i>http://engelsystem.de</i> ist:<br /> Tobias Fiebig, Kurfuerstenstr. 28 D-10785 Berlin, E-Mail: <a href="mailto:mail@wybt.net">mail@wybt.net</a>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <h2>Referenzen</h2>
        <table class="table">
          <tr>
            <th>Event</th>
            <th><span class="icon-icon_angel"></span> Engel</th>
          </tr>
          <tr>
            <td><a href="http://hackover.de/">Hackover 2014, Hannover</a></td>
            <td class="text-right">-</td>
          </tr>
          <tr>
            <td><a href="https://mrmcd.net/">MRMCD14 - MetaRheinMainConstructionDays 2014, Darmstadt</a></td>
            <td class="text-right">41</td>
          </tr>
          <tr>
            <td><a href="http://eh14.easterhegg.eu/">Easterhegg 2014, Stuttgart</a></td>
            <td class="text-right">111</td>
          </tr>
          <tr>
            <td><a href="https://events.ccc.de/congress/2013/">30C3 - 30. Chaos Communication Congress, Hamburg</a></td>
            <td class="text-right">1.044</td>
          </tr>
          <tr>
            <td><a href="https://events.ccc.de/congress/2012/">29C3 - 29. Chaos Communication Congress, Hamburg</a></td>
            <td class="text-right">511</td>
          </tr>
          <tr>
            <td>21C3 - 28C3, Berlin</td>
            <td class="text-right">-</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="<?php echo $site_path; ?>/vendor/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="<?php echo $site_path; ?>/vendor/bootstrap-3.2.0/js/bootstrap.min.js"></script>
</body>
</html>