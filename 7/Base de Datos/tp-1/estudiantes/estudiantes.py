estudiantes = [
    {"nombre": "Luca", "edad": 19, "carrera": "Ingeniería"},
    {"nombre": "Matias", "edad": 19, "carrera": "Informática"},
    {"nombre": "Alan", "edad": 18, "carrera": "Medicina"},
    {"nombre": "Tomas", "edad": 20, "carrera": "Informática"},
    {"nombre": "Facundo", "edad": 18, "carrera": "Educación Física"},
    {"nombre": "Camila", "edad": 23, "carrera": "Economía"},
    {"nombre": "Federico", "edad": 21, "carrera": "Diseño"},
    {"nombre": "Nataly", "edad": 27, "carrera": "Psicología"},
    {"nombre": "Juan", "edad": 21, "carrera": "Filosofía"},
    {"nombre": "Leo", "edad": 44, "carrera": "Ingeniería"}
]

def agregar_estudiante():
    nombre = input("Ingrese el nombre del estudiante: ")
    edad = int(input("Ingrese la edad del estudiante: "))
    carrera = input("Ingrese la carrera del estudiante: ")
    estudiante = {"nombre": nombre, "edad": edad, "carrera": carrera}
    estudiantes.append(estudiante)
    print("Estudiante agregado correctamente.")

def listar_estudiantes():
    print("Lista de estudiantes:")
    for estudiante in estudiantes:
        print(f"Nombre: {estudiante['nombre']}, Edad: {estudiante['edad']}, Carrera: {estudiante['carrera']}")

def actualizar_estudiante():
    nombre = input("Ingrese el nombre del estudiante a actualizar: ")
    for estudiante in estudiantes:
        if estudiante["nombre"] == nombre:
            nueva_edad = int(input("Ingrese la nueva edad: "))
            nueva_carrera = input("Ingrese la nueva carrera: ")
            estudiante["edad"] = nueva_edad
            estudiante["carrera"] = nueva_carrera
            print("Estudiante actualizado correctamente.")
            return
    print("No se encontró el estudiante.")

def eliminar_estudiante():
    nombre = input("Ingrese el nombre del estudiante a eliminar: ")
    for i, estudiante in enumerate(estudiantes):
        if estudiante["nombre"] == nombre:
            del estudiantes[i]
            print("Estudiante eliminado correctamente.")
            return
    print("No se encontró el estudiante.")

def calcular_promedio_edad():
    total_edad = sum(estudiante["edad"] for estudiante in estudiantes)
    promedio_edad = total_edad / len(estudiantes)
    print(f"La edad promedio de los estudiantes es: {promedio_edad:.2f}")

# Editar dos estudiantes
print("Editando información de dos estudiantes:")
actualizar_estudiante()  # Editar estudiante Matias
actualizar_estudiante()  # Editar estudiante Tomas

# Eliminar un estudiante
print("Eliminando un estudiante:")
eliminar_estudiante()  # Eliminar estudiante Facundo

# Calcular edad promedio
calcular_promedio_edad()

while True:
    print("\nMenú de Gestión de Estudiantes:")
    print("1. Agregar estudiante")
    print("2. Listar estudiantes")
    print("3. Actualizar información de estudiante")
    print("4. Eliminar estudiante")
    print("5. Calcular edad promedio")
    print("6. Salir")

    opcion = input("Ingrese el número de opción: ")

    if opcion == "1":
        agregar_estudiante()
    elif opcion == "2":
        listar_estudiantes()
    elif opcion == "3":
        actualizar_estudiante()
    elif opcion == "4":
        eliminar_estudiante()
    elif opcion == "5":
        calcular_promedio_edad()
    elif opcion == "6":
        print("Saliendo del programa...")
        break
    else:
        print("Opción inválida. Intente de nuevo.")