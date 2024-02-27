<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Jugadores de Fortnite</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #0b0c10;
            font-family: 'Arial', sans-serif;
            color: #c5c6c7;
        }

        .navbar {
            background-color: #1f2833 !important;
        }

        .navbar-brand {
            color: #66fcf1;
            font-weight: bold;
        }

        .container {
            margin-top: 3rem;
        }

        .btn-primary {
            background-color: #45a29e !important;
            border-color: #45a29e !important;
        }

        .btn-primary:hover {
            background-color: #66fcf1 !important;
            border-color: #66fcf1 !important;
        }

        .btn-danger {
            background-color: #c5c6c7 !important;
            border-color: #c5c6c7 !important;
            color: #0b0c10 !important;
        }

        .btn-danger:hover {
            background-color: #8b8c8e !important;
            border-color: #8b8c8e !important;
        }

        .table th,
        .table td {
            border-color: #45a29e !important;
            color: #c5c6c7 !important;
        }

        .modal-content {
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: #1f2833;
        }

        .modal-header {
            border-bottom: none;
            color: #66fcf1;
        }

        .form-group label {
            color: #66fcf1;
        }

        .form-control {
            background-color: #0b0c10;
            border-color: #45a29e;
            color: #c5c6c7;
        }

        .form-control:focus {
            background-color: #0b0c10;
            border-color: #66fcf1;
            color: #c5c6c7;
        }

        .btn-secondary {
            background-color: #45a29e !important;
            border-color: #45a29e !important;
            color: #0b0c10 !important;
        }

        .btn-secondary:hover {
            background-color: #66fcf1 !important;
            border-color: #66fcf1 !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Lista de Jugadores de Fortnite</a>
            <button class="btn btn-danger ml-auto">Cerrar Sesión</button>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <button class="btn btn-primary">Nuevo Jugador</button>
                <button class="btn btn-primary ml-2">Exportar a PDF</button>
                <button class="btn btn-primary ml-2">Exportar a Excel</button>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre de Usuario</th>
                            <th scope="col">Nivel</th>
                            <th scope="col">Armas</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ninja</td>
                            <td>80</td>
                            <td>Scar, Tactical Shotgun</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Modificar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Myth</td>
                            <td>75</td>
                            <td>Pump Shotgun, AR</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Modificar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tfue</td>
                            <td>90</td>
                            <td>SMG, Sniper Rifle</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Modificar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Ali-A</td>
                            <td>85</td>
                            <td>Scar, Pump Shotgun</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Modificar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>TimTheTatman</td>
                            <td>70</td>
                            <td>AR, SMG</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Modificar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Lachlan</td>
                            <td>78</td>
                            <td>Tactical Shotgun, Sniper Rifle</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Modificar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Courage</td>
                            <td>82</td>
                            <td>Scar, Rocket Launcher</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Modificar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>SypherPK</td>
                            <td>75</td>
                            <td>AR, Pump Shotgun</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Modificar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Fresh</td>
                            <td>68</td>
                            <td>SMG, Pump Shotgun</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Modificar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <!-- Puedes agregar más jugadores aquí -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editarJugadorModal" tabindex="-1" role="dialog" aria-labelledby="editarJugadorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="editarJugadorModalLabel">Editar Jugador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nombre">Nombre de Usuario:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nivel">Nivel:</label>
                            <input type="number" class="form-control" id="nivel" name="nivel" readonly>
                        </div>
                        <div class="form-group">
                            <label for="armas">Armas:</label>
                            <input type="text" class="form-control" id="armas" name="armas" readonly>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // No es necesario modificar la función editarJugador, ya que solo abre el modal y muestra la información del jugador.
        function editarJugador(nombre, nivel, armas) {
            document.getElementById('nombre').value = nombre;
            document.getElementById('nivel').value = nivel;
            document.getElementById('armas').value = armas;
            $('#editarJugadorModal').modal('show');
        }
    </script>
</body>
</html>
