import React from "react";
import Badge from "react-bootstrap/Badge";
import Button from "react-bootstrap/Button";

export default function BadgeExample()
{
  return (
    <>
      <div>
        <h3>Notification Indication Badge with multiple variants</h3>
        <Button variant="secondary">
          Primary variant
          <Badge variant="primary">
            10
          </Badge>
        </Button>{" "}
        <Button variant="secondary">
          Secondary variant
          <Badge variant="secondary">
            10
          </Badge>
        </Button>{" "}
        <Button variant="secondary">
          Success variant
          <Badge variant="success">
            10
          </Badge>
        </Button>{" "}
        <Button variant="secondary">
          Danger variant
          <Badge variant="danger">
            10
          </Badge>
        </Button>{" "}
        <Button variant="secondary">
          Warning variant
          <Badge variant="warning">
            10
          </Badge>
        </Button>{" "}
        <Button variant="secondary">
          Light variant
          <Badge variant="light">
            10
          </Badge>
        </Button>{" "}
      </div>
      <br />

      <div>
        <h3>Pill Type Badge with multiple variants</h3>
        <Badge pill variant="primary">
          Primary pill variant
        </Badge>{" "}
        <Badge pill variant="secondary">
          Secondary pill variant
        </Badge>{" "}
        <Badge pill variant="success">
          Success pill variant
        </Badge>{" "}
        <Badge pill variant="danger">
          Danger pill variant
        </Badge>{" "}
        <Badge pill variant="warning">
          Warning pill variant
        </Badge>{" "}
        <Badge pill variant="info">
          Info pill variant
        </Badge>{" "}
        <Badge pill variant="light">
          Light pill variant
        </Badge>{" "}
        <Badge pill variant="dark">
          Dark pill variant
        </Badge>
      </div>
      <br />
      <div>
        <h3>Contextual Badge with multiple variants</h3>
        <Badge variant="primary">
          Primary variant</Badge>{" "}
        <Badge variant="secondary">
          Secondary variant</Badge>{" "}
        <Badge variant="success">
          Success variant</Badge>{" "}
        <Badge variant="danger">
          Danger variant</Badge>{" "}
        <Badge variant="warning">
          Warning variant</Badge>{" "}
        <Badge variant="info">
          Info variant</Badge>{" "}
        <Badge variant="light">
          Light variant</Badge>{" "}
        <Badge variant="dark">
          Dark variant </Badge>
      </div>
      <br />
      <div>
        <h3>Use of badges in normal text</h3>
        <h5>
          Heading
          <Badge variant="primary">
            primary badge variant !!!
          </Badge>
        </h5>
        <h5>
          Heading
          <Badge variant="secondary">
            secondary badge variant
          </Badge>
        </h5>
        <h5>
          Heading
          <Badge variant="success">
            success badge variant
          </Badge>
        </h5>
        <h5>
          Heading
          <Badge variant="danger">
            danger badge variant
          </Badge>
        </h5>
        <h5>
          Heading
          <Badge variant="warning">
            warning badge variant
          </Badge>
        </h5>
        <h5>
          Heading
          <Badge variant="info">
            info badge variant
          </Badge>
        </h5>
        <h5>
          Heading
          <Badge variant="dark">
            dark badge variant
          </Badge>
        </h5>
      </div>
    </>
  );
}
