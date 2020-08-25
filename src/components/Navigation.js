import styled from "styled-components";

export const Navigation = styled.nav`
  .nav-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: ${({ theme }) => `${theme.spacings(3)} 0 ${theme.spacings(5)}`};
    position: relative;
    z-index: 2;
  }

  .title {
    padding: 0;
    h1,
    h2 {
      font-size: ${({ theme }) => theme.typography.h4.fontSize};
    }
    h1 {
      margin-bottom: ${({ theme }) => theme.spacings(1)};
    }
    h2 {
      font-weight: 400;
    }
  }

  a,
  button {
    padding: ${({ theme }) => theme.spacings(3)};
    &:hover {
      color: ${({ theme }) => theme.colors.primary};
    }
  }

  .menu-container {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    padding: ${({ theme }) => `80px ${theme.spacings(4)} 12px`};
    background: #fff;
    display: flex;
    flex-direction: column;
    transform: translateY(-100%);
    z-index: 1;

    &.in {
      transform: translateY(0);
    }

    button {
      text-align: left;
    }
  }

  .menu-backdrop {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-color: #00000052;
  }
`;
