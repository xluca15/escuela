def registrar_persona(personas):
    nombre = input("Ingrese el nombre: ")
    edad = int(input("Ingrese la edad: "))
    correo = input("Ingrese el correo electrónico: ")
    personas.append({"nombre": nombre, "edad": edad, "correo": correo})

def remover_persona(personas, nombre):
    for persona in personas:
        if persona['nombre'] == nombre:
            personas.remove(persona)
            print(f"Se ha removido a {nombre} de la lista.")
            return
    print(f"No se encontró a {nombre} en la lista.")

def filtrar_mayores_18(personas):
    return [persona for persona in personas if persona["edad"] > 18]

# Programa principal
personas = []

while True:
    opcion = input("¿Desea registrar una persona? (s/n): ").lower()
    if opcion != 's':
        break
    registrar_persona(personas)

print("\nPersonas registradas:")
for persona in personas:
    for clave, valor in persona.items():
        print(f"{clave}: {valor}", end=", ")
    print()

# Remover una persona
nombre_remover = input("\nIngrese el nombre de la persona a remover: ")
remover_persona(personas, nombre_remover)

mayores_18 = filtrar_mayores_18(personas)
print("\nPersonas mayores de 18 años:")
for persona in mayores_18:
    for clave, valor in persona.items():
        print(f"{clave}: {valor}", end=", ")
    print()