kalkulator.future

Feature: Obliczenia

  Scenario: Kalkulator a * b
    Given I am on homepage
    When I follow "Kalkulator"
    And I fill in "a" with "4"
    And I fill in "b" with "5"
    And I fill in "b" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 60"