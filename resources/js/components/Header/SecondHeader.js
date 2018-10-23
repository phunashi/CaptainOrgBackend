import { Layout, Menu, Dropdown, Icon, Row, Col, Button, Divider } from "antd";
import React, { Component } from "react";
import { Link, Redirect } from "react-router-dom";

const { Header } = Layout;

// const menu = (
//     <Menu>
//         <Menu.Item>
//             <a target="_blank" rel="noopener noreferrer" href="/">
//                 My Account
//             </a>
//         </Menu.Item>
//         <Menu.Item>
//             <a target="_blank" rel="noopener noreferrer" href="/">
//                 My Profile
//             </a>
//         </Menu.Item>
//         <Menu.Item>
//             <a target="_blank" rel="noopener noreferrer" href="/">
//                 Logout
//             </a>
//         </Menu.Item>
//     </Menu>
// );

class SecondHeader extends Component {
    constructor(props) {
        super(props);
        this.state = {
            loggedOut: false
        };
        //     this.handleLogout = this.handleLogout.bind(this);
    }

    // handleLogout() {
    //     localStorage.removeItem("token");
    // }
    componentDidMount() {
        if (window.token) {
            this.setState({ loggedIn: true });
        }
    }

    render() {
        return (
            <Layout>
                <Header
                    style={{
                        background:
                            "linear-gradient(to right, #43cea2, #185a9d)"
                    }}
                >
                    <Row>
                        <Col span={12} style={{ textAlign: "start" }}>
                            <span
                                style={{
                                    fontSize: "30px",
                                    fontStyle: "italic",
                                    color: "white",
                                    lineHeight: "38px"
                                }}
                            >
                                Captain Organick
                            </span>
                        </Col>
                        <Col span={12} style={{ textAlign: "end" }}>
                            {/* <a href="/" style={{ color: "white" }}>
                                <Icon
                                    type="heart"
                                    theme="outlined"
                                    style={{ fontSize: "15px" }}
                                />
                                Favourites
                            </a> */}
                            {/* <Divider type="vertical" />
                            <Link to="/login" style={{ color: "white" }}>
                                <Icon type="user" />
                                Login
                            </Link> */}

                            <Divider type="vertical" />

                            {!window.token ? (
                                <span>
                                    <Link to="/register">Register</Link>
                                    <Divider type="vertical" />
                                    <Link to="/login">Login</Link>
                                </span>
                            ) : (
                                <Link to="/logout">Logout</Link>
                            )}
                            {/* <Link to="/register" style={{ color: "white" }}>
                                Register
                            </Link> */}
                            {/* <Dropdown overlay={menu} placement="bottomCenter">
                                <a href="#" style={{ color: "white" }}>
                                    <Icon
                                        type="user"
                                        theme="outlined"
                                        style={{
                                            fontSize: "20px",
                                            color: "#fff"
                                        }}
                                    />
                                    Hello Yangchen
                                </a>
                            </Dropdown> */}
                        </Col>

                        {/* <Col span={4}>col-4</Col>
            <Col span={4}>col-4</Col>
            <Col span={2} style={{ textAlign: "end" }}>
             
            </Col>
            <Col span={3} style={{ textAlign: "end" }}>
             
            </Col> */}
                    </Row>
                </Header>
            </Layout>
        );
    }
}

export default SecondHeader;
