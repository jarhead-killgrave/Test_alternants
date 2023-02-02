
# Dictionnaire associant pour chaque i la valeur de la fonction fibonnaci(i)
memoire = {}


def fibonnaci(n : int) -> int:
    """
    Renvoie le n-ième terme de la suite de Fibonacci

    :param n: le rang du terme à calculer (avec n >= 0)
    :return: le n-ième terme de la suite de Fibonacci
    :
    """
    global memoire

    if n in memoire:
        return memoire[n]
    if n == 0:
        return 0
    if n == 1:
        return 1
    memoire[n] = fibonnaci(n - 1) + fibonnaci(n - 2)
    return memoire[n]


def sum_paire_fibonnaci_1(n : int) -> int:
    """
    Renvoie la somme des termes pairs de la suite de Fibonacci inférieurs à n

    :param n: le nombre maximal à prendre en compte
    :return: la somme des termes pairs de la suite de Fibonacci inférieurs à n
    """
    i = 0
    somme = 0
    while fibonnaci(i) < n:
        if fibonnaci(i) % 2 == 0:
            somme += fibonnaci(i)
        i += 1
    return somme


def sum_paire_fibonnaci_2(n : int) -> int:
    """
    Renvoie la somme des termes pairs de la suite de Fibonacci inférieurs à n

    La somme des termes pairs de la suite de Fibonacci est égale à la somme des
    termes de rang multiple de 3 de la suite de Fibonacci.

    :param n: le nombre maximal à prendre en compte
    :return: la somme des termes pairs de la suite de Fibonacci inférieurs à n
    """
    i = 0
    somme = 0
    while fibonnaci(i * 3) < n:
        somme += fibonnaci(i * 3)
        i += 1
    return somme


if __name__ == '__main__':
    n = 4000000
    print("Somme des termes pairs de la suite de Fibonacci inférieurs à", n, ":", sum_paire_fibonnaci_1(n))

    print("Somme des termes pairs de la suite de Fibonacci inférieurs à", n, " sachant que fibonnaci(3k) est pair:", sum_paire_fibonnaci_2(n))
