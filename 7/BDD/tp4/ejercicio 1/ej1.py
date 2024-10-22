# Ejercicio 1: Creación y lectura de archivo

# 1. Crear y escribir en el archivo
archivo = open("mi_archivo.txt", "w")

# 2. Escribir la frase
archivo.write("Hola, estoy aprendiendo Python")

# 3. Cerrar el archivo
archivo.close()

# 4. Abrir en modo lectura
archivo = open("mi_archivo.txt", "r")

# 5. Leer y mostrar el contenido
contenido = archivo.read()
print("Contenido del archivo:")
print(contenido)

# Cerrar el archivo
archivo.close()