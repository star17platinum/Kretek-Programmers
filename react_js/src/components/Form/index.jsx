import React, { useState } from "react";
import "./style.css";
import { useForm } from "react-hook-form";
import * as yup from "yup";
import { yupResolver } from "@hookform/resolvers/yup";

const scheme = yup
  .object({
    name: yup.string().required(),
    email: yup.string().email().required(),
    password: yup.string().min(8).required(),
  })
  .required();

const Form = () => {
  const {
    register,
    handleSubmit,
    watch,
    formState: { errors },
  } = useForm({ resolver: yupResolver(scheme) });
  const [visible, setVisible] = useState(false);

  const onSubmit = async (data) => console.log(data);

  return (
    <div className="container">
      <form className="form-container">
        <h3>Create account</h3>
        <div className="input-wrapper">
          <ion-icon name="person"></ion-icon>
          <input
            type="text"
            placeholder="Name"
            {...register("name", {
              required: "Name is Required",
            })}
          />
        </div>
        <div className="input-wrapper">
          <ion-icon name="mail"></ion-icon>
          <input
            type="email"
            placeholder="Email"
            {...register("email", {
              required: "Email is Required",
              pattern: {
                value:
                  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
                message: "Please enter a valid email",
              },
            })}
          />
        </div>
        {errors.email && <p className="error"> {errors.email.message} </p>}
        <div className="input-wrapper">
          <ion-icon name="key"></ion-icon>
          <input
            placeholder="Password"
            type={visible ? "text" : "password"}
            {...register("password", { required: true })}
          />
          {visible ? (
            <ion-icon name="eye" onClick={() => setVisible(false)}></ion-icon>
          ) : (
            <ion-icon
              name="eye-off"
              onClick={() => setVisible(true)}
            ></ion-icon>
          )}
        </div>
        {errors.password && (
          <p className="error"> {errors.password.message} </p>
        )}
        <button className="submit" onClick={handleSubmit(onSubmit)}>
          Sign Up
        </button>
      </form>
    </div>
  );
};

export default Form;
