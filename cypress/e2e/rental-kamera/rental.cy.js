describe('My First Test', () => {
    it('successfully loads', () => {
        expect(true).to.equal(true);
          cy.visit('http://127.0.0.1:8000/login');
          cy.get('h2').should("have.text","Login");
          cy.get(':nthchild(2)')
    })
  })