Feature: Obliczenia

  Scenario: Kalkulator prostopadloscian
    Given I am on homepage
    When I follow "Kalkulator by mmajewski1313"
    And I fill in "a" with "2"
    And I fill in "b" with "3"
    And I fill in "h" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 24"