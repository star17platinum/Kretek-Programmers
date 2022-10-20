import { useMultiForm } from "./useMultiForm";
import Form from "./Form";

function Multiform() {
  const { steps, currentStepIndex, step, isFirstStep, isLastStep, back, next } =
    useMultiForm([
      <Form title="Input Data 1" />,
      <Form title="Input Data 2" />,
      <Form title="Input Data 3" />,
    ]);

  return (
    <div
      style={{
        position: "relative",
        background: "white",
        border: "1px solid black",
        padding: "2rem",
        margin: "1rem",
        borderRadius: "1rem",
      }}
    >
      <form>
        <div
          style={{
            position: "absolute",
            top: "1rem",
            right: "1rem",
          }}
        >
          {currentStepIndex + 1}/{steps.length}
        </div>
        {step}
        <div
          style={{
            marginTop: "1rem",
            display: "flex",
            gap: "1rem",
            justifyContent: "flex-end",
          }}
        >
          {!isFirstStep && (
            <button onClick={back} type="button">
              {" "}
              Back{" "}
            </button>
          )}

          {!isLastStep && (
            <button type="button" onClick={next}>
              Next{" "}
            </button>
          )}
        </div>
      </form>
    </div>
  );
}
export default Multiform;
