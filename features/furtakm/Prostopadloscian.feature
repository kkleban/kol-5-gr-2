Feature: Obliczenia

  Scenario: Kalkulator Prostopadloscian
    Given I am on homepage
    When I follow "Kalkulator Prostopadloscian by furtakm"
    And I fill in "a" with "5"
    And I fill in "b" with "7"
    And I fill in "h" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 105"
