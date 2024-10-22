# Función para realizar la suma
def suma(a, b):
    return a + b

# Función para realizar la resta
def resta(a, b):
    return a - b

# Función para realizar la multiplicación
def multiplicacion(a, b):
    return a * b

# Función para realizar la división
def division(a, b):
    if b != 0:
        return a / b
    else:
        return "Error: División por cero"

# Programa principal
print("Bienvenido a la Calculadora Simple")

# Solicitar al usuario que ingrese dos números
num1 = float(input("Ingrese el primer número: "))
num2 = float(input("Ingrese el segundo número: "))

while True:
    # Mostrar opciones de operación
    print("\nOperaciones disponibles:")
    print("1. Suma")
    print("2. Resta")
    print("3. Multiplicación")
    print("4. División")

    # Solicitar al usuario que elija una operación
    opcion = input("Elija el número de la operación que desea realizar: ")

    # Realizar la operación seleccionada y mostrar el resultado
    if opcion == "1":
        resultado = suma(num1, num2)
        print(f"\nEl resultado de la suma es: {resultado}")
        break
    elif opcion == "2":
        resultado = resta(num1, num2)
        print(f"\nEl resultado de la resta es: {resultado}")
        break
    elif opcion == "3":
        resultado = multiplicacion(num1, num2)
        print(f"\nEl resultado de la multiplicación es: {resultado}")
        break
    elif opcion == "4":
        resultado = division(num1, num2)
        print(f"\nEl resultado de la división es: {resultado}")
        break
    else:
        print("\nOpción no válida. Por favor, elija una opción del 1 al 4.")
        # El bucle continuará, volviendo a mostrar las opciones