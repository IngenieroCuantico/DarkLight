#TALLER 3:PYTHON
#AUTOR(A): ING. ALEJANDRO
#FECHA : 10/10/2023




from datetime import date

hoy = date.today()  #fecha actual

print("Hoy es el dia: ",hoy)



print()

print("EJERCICIO DE LAS CLASES DE TRIANGULOS")

a=int(input("digite el valor de A:"))
b=int(input("digite el valor de B:"))
c=int(input("digitel el valor de C:"))

if  a==b and a==c and b==c:
    print("EL TRIANGULO ES EQUILATERO")
else:
    if a==b or b==c or a==c:
        print("EL TRIANGULO ES ISOSCELES")
    else:
        print("EL TRIANGULO ES ESCALENO")
        
print()

animal = input("digite un animal:")

animal = animal.upper()

if animal =="PERRO":
    print("Este animal es el mejor amigo del hombre:", animal)
elif animal=="GATO":
    print("Este animal persigue los ratones:", animal)
elif animal=="OSO":
    print("Este animal vive en el polonorte", animal)
else:
    print("No es PERRO, No es GATO, ni es OSO... es:", animal)

print()
print("FIN")




