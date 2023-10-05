import React from "react";
import { Formik, Field, Form, ErrorMessage } from "formik";

export default function Form({ errors, status, touched, isSubmitting }) {
  return (
    <Form>
      <div className="form-group">
        <label htmlFor="firstName">First Name</label>
        <Field
          name="firstName"
          type="text"
          className={
            "form-control" +
            (errors.firstName && touched.firstName ? " is-invalid" : "")
          }
        />
        <ErrorMessage
          name="firstName"
          component="div"
          className="invalid-feedback"
        />
      </div>
      <div className="form-group">
        <label htmlFor="lastName">Last Name</label>
        <Field
          name="lastName"
          type="text"
          className={
            "form-control" +
            (errors.lastName && touched.lastName ? " is-invalid" : "")
          }
        />
        <ErrorMessage
          name="lastName"
          component="div"
          className="invalid-feedback"
        />
      </div>
      <div className="form-group">
        <label htmlFor="email">Email</label>
        <Field
          name="email"
          type="text"
          className={
            "form-control" +
            (errors.email && touched.email ? " is-invalid" : "")
          }
        />
        <ErrorMessage
          name="email"
          component="div"
          className="invalid-feedback"
        />
      </div>
      <div className="form-group">
        <label htmlFor="password">Password</label>
        <Field
          name="password"
          type="password"
          className={
            "form-control" +
            (errors.password && touched.password ? " is-invalid" : "")
          }
        />
        <ErrorMessage
          name="password"
          component="div"
          className="invalid-feedback"
        />
      </div>
      <div className="form-group">
        <label htmlFor="confirmPassword">Confirm Password</label>
        <Field
          name="confirmPassword"
          type="password"
          className={
            "form-control" +
            (errors.confirmPassword && touched.confirmPassword
              ? " is-invalid"
              : "")
          }
        />
        <ErrorMessage
          name="confirmPassword"
          component="div"
          className="invalid-feedback"
        />
      </div>
      <div className="form-group">
        <button
          type="submit"
          className="btn btn-primary mr-2"
          disabled={isSubmitting}
        >
          Register
        </button>
        <button type="reset" className="btn btn-secondary">
          Reset
        </button>
      </div>
    </Form>
  );
}
