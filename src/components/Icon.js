import React from "react";
import styled, { css } from "styled-components";
import raw from "raw.macro";

export const iconMap = {
  x: raw("./icon-svgs/x.svg"),
  check: raw("./icon-svgs/check.svg"),
  more: raw("./icon-svgs/more-vertical.svg"),
  arrowLeft: raw("./icon-svgs/arrow-left.svg"),
  chevronRight: raw("./icon-svgs/chevron-right.svg"),
  chevronLeft: raw("./icon-svgs/chevron-left.svg"),
  menu: raw("./icon-svgs/menu.svg"),
};

export const Icon = ({ icon, color, size, rotate, ...rest }) => {
  const iconSvg = iconMap[icon];
  if (!iconSvg) return null;
  return (
    <StyledIcon
      className="icon"
      iconColor={color}
      dangerouslySetInnerHTML={{ __html: iconSvg }}
      iconSize={size}
      rotate={rotate}
      {...rest}
    />
  );
};

const iconSizeMap = {
  xs: "12px",
  sm: "20px",
  md: "24px",
  lg: "40px",
};

const getDimensions = (iconSize) => {
  if (typeof iconSize === "number") return `${iconSize}px`;
  return iconSizeMap[iconSize];
};

const getSvgStyles = (props) => {
  const { iconSize, iconColor, rotate } = props;

  return css`
    width: ${iconSize ? getDimensions(iconSize) : "initial"};
    height: ${iconSize ? getDimensions(iconSize) : "intial"};
    path {
      fill: ${({ theme }) =>
        iconColor ? theme.colors[iconColor] : theme.ui.text};
    }
    polyline,
    circle {
      stroke: ${({ theme }) =>
        iconColor ? theme.colors[iconColor] : theme.ui.text};
    }
    transform: rotate(${rotate});
    transition: fill 0.23s ease;
  `;
};

const StyledIcon = styled.div`
  display: inline-flex;
  > svg {
    ${getSvgStyles}
  }
`;
