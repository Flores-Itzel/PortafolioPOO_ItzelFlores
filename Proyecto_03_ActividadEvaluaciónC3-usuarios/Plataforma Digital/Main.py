from Usuario import Usuario
from Admin import Admin
from Cliente import Cliente
from Invitado import Invitado

# Lista de usuarios
usuarios = [
    Admin("Monserrat Garcia", "monse.garcia@itsl.edu.mx", 3),
    Cliente("Ricardo Flores", "ricardo.flores@gmail.com", 150),
    Invitado("Lana Díaz", "lana.díaz@temporal.com"),
]

def mostrar_todos():
    for u in usuarios:
        print("\nTipo:", type(u).__name__)
        u.mostrar_datos()

def acceso_todos():
    for u in usuarios:
        u.acceso_sistema()

def saludar_todos():
    for u in usuarios:
        u.saludar()

def agregar_usuario():
    print("1) Admin  2) Cliente  3) Invitado")
    tipo = input("Elige tipo: ")
    nombre = input("Nombre: ")
    email = input("Email: ")

    if tipo == "1":
        nivel = int(input("Nivel de acceso (1-3): "))
        usuarios.append(Admin(nombre, email, nivel))
    elif tipo == "2":
        puntos = int(input("Puntos iniciales: "))
        usuarios.append(Cliente(nombre, email, puntos))
    elif tipo == "3":
        usuarios.append(Invitado(nombre, email))
    else:
        print("Tipo inválido")
        return
    print("Usuario agregado correctamente")

def menu():
    while True:
        print("\n--- MENU ---")
        print("1. Ver usuarios")
        print("2. Ver acceso al sistema")
        print("3. Ver saludos")
        print("4. Agregar usuario")
        print("5. Salir")
        opcion = input("Opción: ")

        if opcion == "1":
            mostrar_todos()
        elif opcion == "2":
            acceso_todos()
        elif opcion == "3":
            saludar_todos()
        elif opcion == "4":
            agregar_usuario()
        elif opcion == "5":
            print("Hasta luego")
            break
        else:
            print("Opción no válida")

menu()