estudiantes = []

# Usando append para agregar estudiantes
estudiantes.append(("Luca", 19))
estudiantes.append(("Facu", 18))
estudiantes.append(("Leo", 44))
estudiantes.append(("Ariel", 36))
estudiantes.append(("Rosa", 17))

def encontrar_extremos_edad(lista_estudiantes):
    if not lista_estudiantes:
        return None, None
    
    mayor = menor = lista_estudiantes[0]
    
    for nombre, edad in lista_estudiantes:
        if edad > mayor[1]:
            mayor = (nombre, edad)
        if edad < menor[1]:
            menor = (nombre, edad)
    
    return mayor, menor

# Prueba de la función
mayor_edad, menor_edad = encontrar_extremos_edad(estudiantes)
print(f"Estudiante con mayor edad: {mayor_edad[0]}, {mayor_edad[1]} años")
print(f"Estudiante con menor edad: {menor_edad[0]}, {menor_edad[1]} años")

print("\nLista actualizada de estudiantes:")
for nombre, edad in estudiantes:
    print(f"{nombre}: {edad} años")