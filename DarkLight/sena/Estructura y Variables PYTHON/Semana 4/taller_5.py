#TALLER5:PYTHON
#AUTOR(A): ING. ALEJANDRO
#FECHA : 16/10/2023


from datetime import date

hoy = date.today()  #fecha actual

print("Hoy es : ",hoy)
print()
print("Taller 5 Ciclo For : Aprendizaje SENA")
print("_:::::ING. Alejandro:::::_")
print("::::::::::::::::::::::::::")


numeroconjunto = int(input("por favor digite el numero especial: "))

for i in range(numeroconjunto):
    print(i)    
    
    a+=i
    
    print(d%"los elementos del conjunto A son: ",a)



"""num1 = int(input("por favor, digite el primer numero: "))
num2 = int(input("por favor, digite el segundo numero (mayor): "))


print("Ciclo FOR para el primer numero ")

for i in range(num1):
    
    print(i)
    
print("fin del ciclo FOR para el numero 1")

for j in range(num2):
    print(j)
    print("fin del ciclo FOR para el numero 2")
    


print("Ciclo desde el primer numero hasta el segundo numero")

for i in range(num1, num2):
    
    print(i)
    
print("fin del ciclo")

print()

print("ciclo desde el primero hasta el segundo numero con incrementos de 2 en 2")


for i in range(num1,num2, 2):
    
    print(i)
    
print("fin del ciclo")
print()

empresa = input ("digite nombre de una empresa:")


empresa = empresa.lower()

for character in empresa:
    
    print(character)
    print ("fin del ciclo")
    
print()
print("FIN")


"""