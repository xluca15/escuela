import string

def ingresar_letras():
    letras = []
    alfabeto = set(string.ascii_lowercase)
    
    print("Ingrese al menos 8 letras del abecedario sin repetir.")
    while len(letras) < 8 or input("¿Desea ingresar más letras? (s/n): ").lower() == 's':
        letra = input("Ingrese una letra: ").lower()
        if letra in alfabeto and letra not in letras:
            letras.append(letra)
            print(f"Letra '{letra}' agregada. Total: {len(letras)}")
        elif letra in letras:
            print("Esta letra ya ha sido ingresada. Intente con otra.")
        else:
            print("Por favor, ingrese una letra válida del abecedario.")
    
    return letras

def organizar_alfabeticamente(letras):
    return sorted(letras)

def mostrar_letras(letras):
    print("Letras ingresadas:")
    for letra in letras:
        print(letra, end=" ")
    print()

def remover_letra(letras):
    letra = input("Ingrese la letra que desea remover: ").lower()
    if letra in letras:
        letras.remove(letra)
        print(f"La letra '{letra}' ha sido removida.")
    else:
        print(f"La letra '{letra}' no está en la lista.")

def main():
    letras = ingresar_letras()
    print("\nLetras originales:")
    mostrar_letras(letras)
    
    letras_ordenadas = organizar_alfabeticamente(letras)
    print("\nLetras organizadas alfabéticamente:")
    mostrar_letras(letras_ordenadas)
    
    remover_letra(letras_ordenadas)
    print("\nLetras después de remover:")
    mostrar_letras(letras_ordenadas)
    
    print("\nUsando items() para mostrar índice y letra:")
    for indice, letra in enumerate(letras_ordenadas):
        print(f"Índice {indice}: {letra}")

if __name__ == "__main__":
    main()