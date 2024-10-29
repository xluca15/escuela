# 1. Manipulación de Listas y Diccionarios 
alumnos = ["Luca", "Alan", "Matias", "Facundo", "Camila", "Nataly", "Rosa", "Tomas"]

import random
notas = {}
for alumno in alumnos:
    notas[alumno] = [random.randint(1, 10) for _ in range(6)]

print("Promedios de los alumnos:")
for alumno, calificaciones in notas.items():
    promedio = round(sum(calificaciones) / len(calificaciones), 2)
    print(f"{alumno}: {promedio}")


print("\nTodas las notas:")
for alumno, calificaciones in notas.items():
    print(f"{alumno}: {calificaciones}")