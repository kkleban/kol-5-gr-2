Feature: Obliczenia

  Scenario: Kalkulator a*b*c
    Given I am on homepage
    When I follow "Kalkulator by kkleban"
    And I fill in "a" with "3"
    And I fill in "b" with "4"
    And I fill in "c" with "5"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 60"