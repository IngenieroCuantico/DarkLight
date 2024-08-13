#TALLER 4:PYTHON
#AUTOR(A): ING. ALEJANDRO
#FECHA : 16/10/2023


from datetime import date

hoy = date.today()  #fecha actual

print("Hoy es : ",hoy)

print()

print("TALLER 6 CICLOS ITERATIVOS CON LA SENTENCIA WHILE")
print()



num1 =int(input("digite un numero:"))

print("***Ciclo controlado por contador ")

i=1
while i <= num1:
    print(i)
    i +=  1
print("fin del ciclo")


print()



print("***Ciclo controlado por evento")

i=1

numero1 = 5

numero2 = int(input("Digite un numero de 1 al 10: "))


#Condicion WHILE
while numero2 != numero1:

    i += 1
    
    numero2 = int(input("Digite un numero del 1 al 10:  "))
    
print("Acertaste en el intento No.",i)
print("FIN Del CICLO")

print()
print("***Ciclo abortado con la sentencia break")

amistad = input("digite el nombre  de una amistad: ")

amistad = amistad.upper()

for character in amistad:
    
    print(character)
    
    if character == "A":
        break
    print("fin del ciclo")
    print("/DarkLight")
    print("FIN")





print("fin de ciclo")
print()
print("FIN")