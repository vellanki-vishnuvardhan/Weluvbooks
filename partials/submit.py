from tkinter import *
app=Tk()
app.geometry("500x500")
app.configure(bg="black")
app.title("Sri")
login_name=Label(app,text="Login",fg="white",bg="black",font=("Times",24)).place(x=210,y=50)
                 
user_name=Label(app,text="name:",bg="black",fg="white",font("Times",15)).place(x=55,y=150)
user_entry=Entry(app,bd=2,width=40).place(x=120,y=155)


user_password=Label(app,text="password:",bg="black",fg="white",font("Times",15).place(x=20,y=200)
user_password=entry(app,bd=2,width=40,show="*").place(x=120,y=250)

user_number=Label(app,text="phone no:",bg="black",fg="white",font=("Times",15)).place(x=20,y=200)
user_number_entry=Entry(app,bd=2,width=40).place(x=120,y=225)

submit_btn=Button(app,text="submit",bd=2,bg="white",fg="black",command=display).place(x=120,y=225)
app.mainloop()
