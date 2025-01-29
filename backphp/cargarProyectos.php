<?php

require '../config/conex.php';

$pdo = conexionBD();

function obtenerProyectos($pdo)
{
    try {
        $stmt = $pdo->query("SELECT * FROM proyectos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error al cargar los proyectos " . $e->getMessage();
        return [];
    }
}

function mostrarProyectos($proyectos)
{
    if (!empty($proyectos)) {
        foreach ($proyectos as $proyect) {
            echo '
                <div class="proyecto-card"> 
                    <img src="' . htmlspecialchars($proyect['foto_url']) . '" alt="Foto de proyecto:' . htmlspecialchars($proyect['nombre']) . '">
                    <p><span>Nombre:</span> ' . htmlspecialchars($proyect['nombre']) . '</p>
                    <p><span>Descripcion:</span> ' . htmlspecialchars($proyect['descripcion']) . '</p>
                    <p><span>Link de git:</span> <a href="' . htmlspecialchars($proyect['linkgit']) . '" target="_blank"> <i class="bx bxl-github"></i> </a></p>
                    <p><span>Fecha:</span> ' . htmlspecialchars($proyect['fecha']) . '</p>
                    <p><span>Tecnologias usadas:</span> ' . htmlspecialchars($proyect['tecnologias']) . '</p>
                </div>
            ';
        }
    }
}