/*1. Mostrar los usuarios inactivos
2. Mostrar la cantidad usuarios.
3. Mostrar todas las columnas de la tabla usuario y la tabla grupo usuario
4. Mostrar la tabla grupo usuario y otra columna que me diga cantidad de usuario por cada grupo.
 (Opcional)
 Vergara Astocondor Jair Alejandro
 */

---
SELECT * FROM usuario WHERE user_activo = 0;

SELECT COUNT(*) AS total_usuarios FROM usuario;

SELECT usuario., usuario_grupo.
FROM usuario
JOIN usuario_grupo ON usuario.id_grupo_usu = usuario_grupo.id;

SELECT usuario_grupo.*, COUNT(usuario.id) AS cantidad_usuarios
FROM usuario_grupo
LEFT JOIN usuario ON usuario_grupo.id = usuario.id_grupo_usu
GROUP BY usuario_grupo.id;