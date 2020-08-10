
context('Actions', () => {
  before(() => {
    cy.seed('LiveBlogEditorSeeder')
    // cy.seed('LiveBlogPost')

  })

  it('stuff', () => {
    cy.visitAdmin()
  })


})
