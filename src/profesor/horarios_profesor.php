<?php 
// REQUIRES
require('../comunes_polideportivo/footer.php');
require('../comunes_polideportivo/header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio Profesor</title>

    <link rel="stylesheet" href="../../public/css/horariosProfesor.css">
    <link rel="stylesheet" href="../../public/css/polideportivo-global.css">
</head>
<body>
    <?= header_usuarios('profesor');?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <table class="table">
                <caption class="text-center">ENERO</caption>
                    <thead>
                        <tr>
                            <th>l</th>
                            <th>M</th>
                            <th>X</th>
                            <th>J</th>
                            <th>V</th>
                            <th>S</th>
                            <th>D</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <td><span>1</span></td>
                        <td class="dia-clase"><span>2</span></td>
                        <td class="dia-clase"><span>3</span></td>
                        <td class="dia-clase"><span>4</span></td>
                        <td><span>5</span></td>
                        <td ><span>6</span></td>
                    </tr>
                    <tr>
                        <td class="dia-clase"><span>7</span></td>
                        <td><span>8</span></td>
                        <td class="dia-clase"><span>9</span></td>
                        <td class="dia-clase"><span>10</span></td>
                        <td class="dia-clase"><span>11</span></td>
                        <td><span>12</span></td>
                        <td><span>13</span></td>
                    </tr>
                    <tr>
                        <td class="dia-clase"><span>14</span></td>
                        <td class="dia-clase"><span>15</span></td>
                        <td><span>16</span></td>
                        <td><span>17</span></td>
                        <td class="dia-clase"><span>18</span></td>
                        <td><span>19</span></td>
                        <td><span>20</span></td>
                    </tr>
                    <tr>
                        <td><span>21</span></td>
                        <td class="dia-clase"><span>22</span></td>
                        <td class="dia-clase"><span>23</span></td>
                        <td><span>24</span></td>
                        <td class="dia-clase"><span>25</span></td>
                        <td><span>26</span></td>
                        <td><span>27</span></td>
                    </tr>
                    <tr>
                        <td class="dia-clase"><span>28</span></td>
                        <td class="dia-clase"><span>29</span></td>
                        <td class="dia-clase"><span>30</span></td>
                        <td><span>31</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <?= footer();?>
</body>
</html>