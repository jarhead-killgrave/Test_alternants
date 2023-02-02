
def max_palindrome(n : int) -> int:
    """
    Retourne le plus grand palindrome produit de deux nombres inférieurs à n

    :param n: le nombre maximal à prendre en compte
    :return: le plus grand palindrome produit de deux nombres inférieurs à n
    """
    max_palindrome = 0
    
    for i in range(n - 1, 0, -1):
        for j in range(n - 1, i - 1, -1):
            possible_palindrome = i * j
            if possible_palindrome <= max_palindrome:
                break
            if is_palindrome(possible_palindrome):
                max_palindrome = possible_palindrome
    return max_palindrome

def is_palindrome(n : int) -> bool:
    """
    Retourne True si n est un palindrome, False sinon

    :param n: le nombre à tester
    :return: True si n est un palindrome, False sinon
    """
    num = str(n)
    return num == num[::-1] 


if __name__ == '__main__':
    n = 999
    print(f"Le plus grand palindrome produit de deux nombres inférieurs à {n} est {max_palindrome(n)}.")




