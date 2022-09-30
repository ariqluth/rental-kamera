
  describe('Authentication1', () => {
    it('sign a user up', () => {
        // expect(true).to.equal(true);
          //  cy.refreshDatabase();
      
      
      
           cy.visit('http://127.0.0.1:8000/register');
           cy.get('#email').type('ttzluthfi@gmail.com');
           cy.get('#name').type('ttzluthfi');
           cy.get('#alamat').type('Perumnas Sima');
           cy.get('#password').type('12345678');
           cy.get('#password-confirm').type('12345678');
           cy.get('#hak_akses').select('Pemilik');
           cy.contains('input', 'Register').click();
          // cy.get('h2').should("have.text","Login");

          // cy.get(':nthchild(2)')
    })


    it('sign a user up customer', () => {
      // expect(true).to.equal(true);
        //  cy.refreshDatabase();
    
    
    
         cy.visit('http://127.0.0.1:8000/register');
         cy.get('#email').type('ttzluth@gmail.com');
         cy.get('#name').type('ttzluthfi');
         cy.get('#alamat').type('Perumnas Sima');
         cy.get('#password').type('12345678');
         cy.get('#password-confirm').type('12345678');
         cy.get('#hak_akses').select('Customer');
         cy.contains('input', 'Register').click();
        // cy.get('h2').should("have.text","Login");

        // cy.get(':nthchild(2)')
  })

    it('sign a user in', () => {
      // expect(true).to.equal(true);
        //  cy.refreshDatabase();
        Cypress.on('uncaught:exception', (err, runnable) => {
          // returning false here prevents Cypress from
          // failing the test
          return false
      })
    
         cy.visit('http://127.0.0.1:8000/login');
         cy.get('#email').type('ttzluth@gmail.com');
         cy.get('#password').type('12345678');
         cy.contains('input', 'Login').click();
        // cy.get('h2').should("have.text","Login");

        // cy.get(':nthchild(2)')
  })
  })

  // create
  describe('Create Data', () => {
    it('Create Kamera kondisi', () => {
      // expect(true).to.equal(true);
        //  cy.refreshDatabase();
        Cypress.on('uncaught:exception', (err, runnable) => {
          // returning false here prevents Cypress from
          // failing the test
          return false
      })
         cy.visit('http://127.0.0.1:8000/pemilik/kondisi-kamera');
         cy.contains('a', 'Tambahkan').click();
         cy.get('#kondisi_alat').type('bagus');
         cy.get('#sub_nama').type('DSLR-600D-bagus');
         cy.contains('input', 'submit').click();
         
  })
  // Create

  it('Create Kamera ', () => {
    // expect(true).to.equal(true);
      //  cy.refreshDatabase();
      Cypress.on('uncaught:exception', (err, runnable) => {
        // returning false here prevents Cypress from
        // failing the test
        return false
    })
    
       cy.visit('http://127.0.0.1:8000/pemilik/alat');
       cy.get('#email').type('ttzluthfi@gmail.com');
       cy.get('#password').type('12345678');
       cy.contains('input', 'Login').click();
       cy.contains('a', ' Disewakan Alat').click();
      cy.contains('a', 'Tambahkan').click();
       cy.get('#nama_alat').type('DSLR-600D ');
       cy.get('#speksifikasi').type('Kamera ini cocok untuk daerah pegunungan dan sekitarnya');
       cy.get('#kategori').select('DSLR');
      //  cy.contains('#image', 'image_name').click();
     
      cy.get('#image').selectFile('cypress/fixtures/canon1200D.jfif');
       cy.get('#harga').type('500000');
       cy.get('#stok').type('2');
      
       cy.contains('button', 'Submit').click();
       
})
})

describe('Update  Data', () => {
  it(' update kondisi', () => {
    // expect(true).to.equal(true);
      //  cy.refreshDatabase();
      Cypress.on('uncaught:exception', (err, runnable) => {
        // returning false here prevents Cypress from
        // failing the test
        return false
    })
       cy.visit('http://127.0.0.1:8000/pemilik/kondisi-kamera');
       cy.contains('a', 'Update').click();
       cy.get('#kondisi_alat').type('bagus').clear();
       cy.get('#kondisi_alat').type('lumayan');
       cy.get('#sub_nama').type('DSLR-600D-lumayan');
       cy.contains('input', 'submit').click();
       
})


// update
it('update Kamera ', () => {
  // expect(true).to.equal(true);
    //  cy.refreshDatabase();
    Cypress.on('uncaught:exception', (err, runnable) => {
      // returning false here prevents Cypress from
      // failing the test
      return false
  })
  
  

     cy.visit('http://127.0.0.1:8000/pemilik/alat');
     cy.get('#email').type('ttzluthfi@gmail.com');
     cy.get('#password').type('12345678');
     cy.contains('input', 'Login').click();
     cy.contains('a', ' Disewakan Alat').click();
    cy.contains('a', 'Update').click();
     cy.get('#nama_alat').type('DSLR-600D').clear();
     cy.get('#nama_alat').type('DSLR-1700D');
     cy.get('#speksifikasi').type('Kamera ini cocok untuk daerah pegunungan dan sekitarnya').clear();
     cy.get('#speksifikasi').type('Cocok didaerah pantai dan memiliki Night Vision ');
     cy.get('#kategori').select('DSLR');
    //  cy.contains('#image', 'image_name').click();
   
    cy.get('#image').selectFile('cypress/fixtures/canon1200D.jfif');
     cy.get('#harga').type('500000');
     cy.get('#stok').type('2');
    
     cy.contains('button', 'Submit').click();
     
})
   
  
})


describe('Delete  Data', () => {
  it(' Delete kondisi', () => {
    // expect(true).to.equal(true);
      //  cy.refreshDatabase();
      Cypress.on('uncaught:exception', (err, runnable) => {
        // returning false here prevents Cypress from
        // failing the test
        return false
    })
       cy.visit('http://127.0.0.1:8000/pemilik/kondisi-kamera');
       cy.contains('button', 'Delete').click();
     
       
})


// delete 
it('Delete Kamera ', () => {
  // expect(true).to.equal(true);
    //  cy.refreshDatabase();
    Cypress.on('uncaught:exception', (err, runnable) => {
      // returning false here prevents Cypress from
      // failing the test
      return false
  })
  
  cy.visit('http://127.0.0.1:8000/pemilik/alat');
  cy.get('#email').type('ttzluthfi@gmail.com');
  cy.get('#password').type('12345678');
  cy.contains('input', 'Login').click();
  cy.contains('a', ' Disewakan Alat').click();
 cy.contains('button', 'Delete').click();
     
})
   
  
})