class ContactForm {
  constructor() {
    this.sendBtn = document.getElementById("send")
    this.contactFrm = document.getElementById("contactus")
    this.contactName = document.getElementById("name")
    this.contactEmail = document.getElementById("email")
    this.subject = document.getElementById("subject")
    this.message = document.getElementById("message")
    this.events()
  }

  events() {
    if (this.sendBtn) {
      this.sendBtn.addEventListener("click", () => this.submitForm())
    }
  }

  submitForm() {
    if (this.contactFrm.checkValidity()) {
      this.contactFrm.method = "POST"
      this.contactFrm.submit()
      this.contactFrm.reset()
    } else {
      this.contactFrm.reportValidity()
    }
    return false
  }

  validateForm() {
    return false
  }
}

export default ContactForm
