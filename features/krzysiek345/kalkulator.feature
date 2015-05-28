Feature: Obliczenia

  Scenario: Kalkulator a * b *c
    Given I am on homepage
    When I follow "Kalkulator by gajdaw"
    And I fill in "a" with "2"
    And I fill in "b" with "3"
    And I fill in "c" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 24"