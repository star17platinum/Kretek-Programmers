import React, { useState } from "react";
import { Formik, Field, Form, ErrorMessage } from "formik";
import * as Yup from "yup";
import FancyForm from "./Form";
import toastr from "toastr";
import "toastr/build/toastr.min.css";

export default function Registration() {
  const [isSubmitting, setSubmitting] = useState(false);
  return (
    <>
      <Formik
        initialValues={{
          firstName: "",
          lastName: "",
          email: "",
          password: "",
          confirmPassword: ""
        }}
        validationSchema={Yup.object().shape({
          firstName: Yup.string().required("First Name is required"),
          lastName: Yup.string().required("Last Name is required"),
          email: Yup.string()
            .email("Email is invalid")
            .required("Email is required"),
          password: Yup.string()
            .min(6, "Password must be at least 6 characters")
            .required("Password is required"),
          confirmPassword: Yup.string()
            .oneOf([Yup.ref("password"), null], "Passwords must match")
            .required("Confirm Password is required")
        })}
        onSubmit={(values, { setSubmitting, resetForm }) => {
          toastr.options = {
            positionClass: "toast-bottom-left",
            hideDuration: 300,
            timeOut: 60000
          };
          toastr.clear();
          // When button submits form and form is in the process of submitting, submit button is disabled
          setSubmitting(true);
          setTimeout(function() {
            console.log("SUCCESS: ", JSON.stringify(values, null, 4));
            toastr.success("Success! Registration has occured.");
          }, 3000);

          // Resets form after submission is complete
          resetForm();
          // Sets setSubmitting to false after form is reset
          setSubmitting(false);
        }}
      >
      {(props) => <FancyForm {...props}/>}
      
      </Formik>
    </>
  );
}

//    {FancyForm}
