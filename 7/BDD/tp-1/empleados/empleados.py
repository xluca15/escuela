# Lista de empleados predefinidos
employees = [
    {"nombre": "Luca", "edad": 19, "puesto": "herrero"},
    {"nombre": "Matias", "edad": 19, "puesto": "programador"},
    {"nombre": "Alan", "edad": 18, "puesto": "fiambrero"},
    {"nombre": "Tomas", "edad": 20, "puesto": "programador"},
    {"nombre": "Facundo", "edad": 18, "puesto": "deportista"},
    {"nombre": "Camila", "edad": 23, "puesto": "cajera"},
    {"nombre": "federico", "edad": 21, "puesto": "barbero"},
    {"nombre": "Nataly", "edad": 27, "puesto": "manicura"},
    {"nombre": "juan", "edad": 21, "puesto": "vago"},
    {"nombre": "Leo", "edad": 44, "puesto": "herrero"}
]

def add_employee():
    name = input("Ingrese el nombre del empleado: ")
    age = int(input("Ingrese la edad del empleado: "))
    position = input("Ingrese el puesto del empleado: ")
    employee = {"nombre": name, "edad": age, "puesto": position}
    employees.append(employee)
    print("Empleado agregado correctamente.")

def list_employees():
    print("Lista de empleados:")
    for employee in employees:
        print(f"Nombre: {employee['nombre']}, Edad: {employee['edad']}, Puesto: {employee['puesto']}")

def update_employee():
    name = input("Ingrese el nombre del empleado a actualizar: ")
    for employee in employees:
        if employee["nombre"] == name:
            new_age = int(input("Ingrese la nueva edad: "))
            new_position = input("Ingrese el nuevo puesto: ")
            employee["edad"] = new_age
            employee["puesto"] = new_position
            print("Empleado actualizado correctamente.")
            return
    print("No se encontró el empleado.")

def remove_employee():
    name = input("Ingrese el nombre del empleado a eliminar: ")
    for i, employee in enumerate(employees):
        if employee["nombre"] == name:
            del employees[i]
            print("Empleado eliminado correctamente.")
            return
    print("No se encontró el empleado.")

def calculate_avg_age():
    total_age = sum(employee["edad"] for employee in employees)
    avg_age = total_age / len(employees)
    print(f"La edad promedio de los empleados es: {avg_age:.2f}")

while True:
    print("\nMenú de Gestión de Empleados:")
    print("1. Agregar empleado")
    print("2. Listar empleados")
    print("3. Actualizar información de empleado")
    print("4. Eliminar empleado")
    print("5. Calcular edad promedio")
    print("6. Salir")

    choice = input("Ingrese el número de opción: ")

    if choice == "1":
        add_employee()
    elif choice == "2":
        list_employees()
    elif choice == "3":
        update_employee()
    elif choice == "4":
        remove_employee()
    elif choice == "5":
        calculate_avg_age()
    elif choice == "6":
        print("Saliendo del programa...")
        break
    else:
        print("Opción inválida. Intente de nuevo.")